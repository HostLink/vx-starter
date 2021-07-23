{{table|raw}}
<?php

return new class
{
    public function get(VX $vx)
    {
        $t = $vx->ui->createTable("data");
        $t->addView();
        $t->addEdit();
        $t->add("Name", "name");
        $this->table = $t;
    }

    function data(VX $vx)
    {
        $resp = $vx->ui->createTableResponse();
        $resp->source = Testing::Query();

        $resp->add("name");
        return $resp;
    }
};
