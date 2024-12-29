<?php

namespace phpMyFAQ\Controller;

use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontControllerTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testHandle()
    {
        $request = $this->createMock(Request::class);
        $path = 'some/test/path';

        $controller = new FrontController();
        $response = $controller->handle($request, $path);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals('Handled by FrontController: ' . $path, $response->getContent());
    }
}
