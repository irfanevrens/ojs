<?php

namespace Ojs\ApiBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;

class TestRestController extends FOSRestController
{

    /**
     *
     * @ApiDoc(
     *  resource=true,
     *  description="Get Test Action",
     *  filters={
     *      {"name"="id", "dataType"="integer"}
     *  }
     * )
     * @Get("/test/{id}")
     *
     * @param $id
     * @return array
     */
    public function getTestAction($id)
    {
        $res = array("status" => $id);

        return $res;
    }
}
