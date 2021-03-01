<?php

namespace Swatty007\NovaEasyAvatars\Fields;

use Identicon\Identicon as IdenticonBase;

class Identicon extends AvatarBase
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
            return (new IdenticonBase())->getImageDataUri($resource->{$attribute}, $this->size);
        };

        $this->preview($callback)->thumbnail($callback);
    }
}
