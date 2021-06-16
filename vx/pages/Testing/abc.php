{{s}}
<?php

return ["get" => function () {

    $this->s = Testing::Query()->toArray();
}];
