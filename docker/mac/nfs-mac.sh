#!/usr/bin/env bash

OS=$(uname -s)
PROJECT_PATH=$(pwd)

# Colors
COLOR_RESET='\033[0m'
COLOR_INFO='\033[32m'
COLOR_COMMENT='\033[33m'
COLOR_SUCCESS='\033[1;90;42m'

if [[ "$OS" != "Darwin" ]]; then
    exit 0;
fi

# Check if NFS for mac is already configured or not
EXPORT_FILE=/etc/exports
NFS_FILE=/etc/nfs.conf
NFS_LINE="nfs.server.mount.require_resv_port = 0"
if grep -Fs "$PROJECT_PATH" "$EXPORT_FILE" && grep -Fs "$NFS_LINE" "$NFS_FILE"; then
  echo "NFS for mac is already configured."
  exit 0;
fi

echo ""
echo " +-----------------------------+"
echo " | Setup native NFS for Docker |"
echo " +-----------------------------+"
echo ""

echo "WARNING: This script will shut down running containers."
echo ""
echo -n "Do you wish to proceed? [y]: "
read -r decision

if [[ "$decision" != "y" ]]; then
  echo "Exiting. No changes made."
  exit 0
fi

echo ""

if [[ $EUID -eq 0 ]]; then
  echo "This script must NOT be run with sudo/root. Please re-run without sudo." 1>&2
  exit 1
fi

if [[ "$TERM_PROGRAM" != "Apple_Terminal" ]]; then
  osascript -so <<EOF
  tell application "Terminal"
    activate
    do script "cd '${PWD}'; make nfs-mac" in window 1
  end tell
EOF
  printf "%sProcess has been launched in native terminal%s\n" "${COLOR_INFO}" "${COLOR_RESET}"
  exit 0
fi

if ! docker ps > /dev/null 2>&1 ; then
  echo "== Waiting for docker to start..."
fi

open -a Docker

while ! docker ps > /dev/null 2>&1 ; do sleep 2; done

echo "== Stopping running docker containers..."
docker-compose down > /dev/null 2>&1
docker volume prune -f > /dev/null

osascript -e 'quit app "Docker"'

echo "== Resetting folder permissions..."
U=$(id -u)
G=$(id -g)
sudo chown -R "$U":"$G" .

echo "== Setting up NFS..."
EXPORT_LINE="$PROJECT_PATH -alldirs -mapall=$U:$G localhost"

if ! grep -Fxqs "$PROJECT_PATH" "$EXPORT_FILE"
then
    grep -qFs -- "$EXPORT_LINE" "$EXPORT_FILE" || echo "$EXPORT_LINE" | sudo tee -a "$EXPORT_FILE" > /dev/null
fi

grep -qFs -- "$NFS_LINE" "$NFS_FILE" || echo "$NFS_LINE" | sudo tee -a "$NFS_FILE" > /dev/null

echo "== Restarting NFSD..."
sudo nfsd restart

echo "== Restarting docker..."
open -a Docker

while ! docker ps > /dev/null 2>&1 ; do sleep 2; done

echo ""
echo "SUCCESS! Now go run your containers 🐳"
