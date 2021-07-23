<el-card>
    {{view|raw}}
</el-card>

<?php

/**
 * Created by: Raymond Chong
 * Date: 2021-07-22 
 */
return new class
{
    function get(VX $vx)
    {
        $view = $vx->ui->createView();
        $view->add("Name", "name");
        $this->view = $view;
    }
};
