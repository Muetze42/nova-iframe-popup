<?php

namespace NormanHuth\IframePopup;

use Laravel\Nova\Fields\Text as Field;

class IframePopup extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'iframe-popup';

    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->withMeta([
            'icon' => 'external-link',
            'containerClass' => '',
            'containerClassIndex' => 'text-center',
            'containerClassDetail' => '',
            'containerClassForm' => '',
            'btnClass' => 'flex-shrink-0 shadow rounded focus:outline-none focus:ring bg-primary-500 hover:bg-primary-400 active:bg-primary-600 text-white dark:text-gray-800 inline-flex items-center font-bold px-4 h-9 text-sm flex-shrink-0',
        ]);
    }

    public function icon(?string $heroicon): static
    {
        $this->withMeta(['icon' => $heroicon]);

        return $this;
    }

    public function faIcon(string $fontAwesomeClass): static
    {
        $this->withMeta(['faIcon' => $fontAwesomeClass]);

        return $this;
    }

    public function preText(string $text): static
    {
        $this->withMeta(['preText' => $text]);

        return $this;
    }

    public function sufText(string $text): static
    {
        $this->withMeta(['sufText' => $text]);

        return $this;
    }

    public function containerClass(string $class): static
    {
        $this->withMeta(['containerClass' => $class]);

        return $this;
    }

    public function containerClassIndex(string $class): static
    {
        $this->withMeta(['containerClassIndex' => $class]);

        return $this;
    }

    public function containerClassDetail(string $class): static
    {
        $this->withMeta(['containerClassDetail' => $class]);

        return $this;
    }

    public function containerClassForm(string $class): static
    {
        $this->withMeta(['containerClassForm' => $class]);

        return $this;
    }

    public function btnClass(string $class): static
    {
        $this->withMeta(['btnClass' => $class]);

        return $this;
    }
}
