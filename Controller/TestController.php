<?php

namespace Webfactory\Bundle\ExceptionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TestController extends Controller {

    /**
     * @Route("/{code}/", defaults={"_format" = "html"}, requirements={"code" = "\d+"})
     * @Route("/{code}/{_format}/", requirements={"code" = "\d+"})
     */
    public function testErrorPageAction($code) {
        throw new HttpException($code);
    }

}
