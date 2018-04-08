<?php

namespace Sweetchuck\Robo\Yarn\Option;

trait BaseOptions
{

    // region Option - assetNamePrefix.
    /**
     * @var string
     */
    protected $assetNamePrefix = '';

    public function getAssetNamePrefix(): string
    {
        return $this->assetNamePrefix;
    }

    /**
     * @return $this
     */
    public function setAssetNamePrefix(string $value)
    {
        $this->assetNamePrefix = $value;

        return $this;
    }
    // endregion

    // region Option - workingDirectory.
    /**
     * @var string
     */
    protected $workingDirectory = '';

    public function getWorkingDirectory(): string
    {
        return $this->workingDirectory;
    }

    /**
     * @return $this
     */
    public function setWorkingDirectory(string $value)
    {
        $this->workingDirectory = $value;

        return $this;
    }
    // endregion

    // region Option - yarnExecutable.
    /**
     * @var string
     */
    protected $yarnExecutable = 'yarn';

    public function getYarnExecutable(): string
    {
        return $this->yarnExecutable;
    }

    /**
     * @return $this
     */
    public function setYarnExecutable(string $value)
    {
        $this->yarnExecutable = $value;

        return $this;
    }
    // endregion

    // region Option - nodeExecutable.
    /**
     * @var string
     */
    protected $nodeExecutable = '';

    public function getNodeExecutable(): string
    {
        return $this->nodeExecutable;
    }

    /**
     * @return $this
     */
    public function setNodeExecutable(string $value)
    {
        $this->nodeExecutable = $value;

        return $this;
    }
    // endregion

    protected function getOptionsBase(): array
    {
        return [
            'workingDirectory' => [
                'type' => 'other',
                'value' => $this->getWorkingDirectory(),
            ],
            'nodeExecutable' => [
                'type' => 'other',
                'value' => $this->getNodeExecutable(),
            ],
            'yarnExecutable' => [
                'type' => 'other',
                'value' => $this->getYarnExecutable() ?: 'yarn',
            ],
        ];
    }

    /**
     * @return $this
     */
    protected function setOptionsBase(array $options)
    {
        foreach ($options as $name => $value) {
            switch ($name) {
                case 'assetNamePrefix':
                    $this->setAssetNamePrefix($value);
                    break;

                case 'workingDirectory':
                    $this->setWorkingDirectory($value);
                    break;

                case 'nodeExecutable':
                    $this->setNodeExecutable($value);
                    break;

                case 'yarnExecutable':
                    $this->setYarnExecutable($value);
                    break;
            }
        }

        return $this;
    }
}
