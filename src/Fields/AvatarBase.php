<?php

namespace Swatty007\NovaEasyAvatars\Fields;

use Laravel\Nova\Fields\Avatar;

class AvatarBase extends Avatar
{
    public int $size = 512;
    public int $fontSize = 256;

    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string|null  $attribute
     * @param  mixed|null  $resolveCallback
     * @return void
     */
    public function __construct($name = 'Avatar', $attribute = 'email', $resolveCallback = null)
    {
        parent::__construct($name, $attribute ?? 'email', $resolveCallback);

        $this->exceptOnForms();

        $this->withMeta(['indexName' => '']);
    }

    /**
     * Allows overwriting our Avatars output size.
     *
     * @param int $size
     * @return $this
     */
    public function setSize($size = 100)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Allows overwriting our Avatars output size.
     *
     * @param int $size
     * @return $this
     */
    public function setFontSize($size = 50)
    {
        $this->fontSize = $size;

        return $this;
    }
}
