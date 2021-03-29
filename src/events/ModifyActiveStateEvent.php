<?php
namespace goldinteractive\sitecopy\events;

use yii\base\Event;

class ModifyActiveStateEvent extends Event
{
    public $element;
    public $activeState;
}
