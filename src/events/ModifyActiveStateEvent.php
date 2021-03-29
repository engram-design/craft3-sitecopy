<?php
namespace goldinteractive\sitecopy\events;

use craft\events\CancelableEvent;

class ModifyActiveStateEvent extends CancelableEvent
{
    public $element;
    public $activeState;
}
