<?php
namespace App\Service;

use Symfony\Component\HttpKernel\KernelInterface;

class PathService
{
    /**
     * @var KernelInterface
     */
    private $kernel;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    public function pathData() {
        return sprintf('%s/src/Data/', $this->kernel->getProjectDir());
    }
}