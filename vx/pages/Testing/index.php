<?php

return new class
{
    public function get(VX $vx)
    {

        $user=$vx->getModule("User");
        outp($user->getFiles());

        

        $test = $vx->getModule("Testing");
        outp($test->getFiles());
    }
};
