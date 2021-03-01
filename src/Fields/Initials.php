<?php

namespace Swatty007\NovaEasyAvatars\Fields;

class Initials extends AvatarBase
{
    /**
     * Resolve the given attribute from the given resource.
     *
     * @param  mixed  $resource
     * @param  string  $attribute
     * @return mixed
     */
    protected function resolveAttribute($resource, $attribute)
    {
        $callback = function () use ($resource, $attribute) {
            return \Avatar::create($resource[$attribute])
                ->setDimension($this->size)
                ->setFontSize($this->fontSize)
                ->toBase64();
        };

        $this->preview($callback)->thumbnail($callback);
    }
}
