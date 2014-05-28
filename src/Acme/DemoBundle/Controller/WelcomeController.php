<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\Foo;
use Symfony\Component\HttpFoundation\Request;
class WelcomeController extends Controller
{
    public function newAction(Request $request)
	{
	    $foo = new Foo();
      

        $form = $this->createFormBuilder($foo)
            ->add('nombre', 'text')
            ->add('apellidos', 'text')
			->add('fecha', 'date')
			->add('foobar', 'text')
            ->getForm();

        if ($request->isMethod('POST')) {
		$form->bind($request);
		if ($form->isValid()) {
    $em = $this->getDoctrine()->getManager();
    $em->persist($foo);
    $em->flush();

    return $this->redirect($this->generateUrl('welcome'));
}}
		
		return $this->render('AcmeDemoBundle:Welcome:new.html.twig', array(
            'form' => $form->createView(),
        ));
		
	}
	public function fooAction()
    {
     

    return new Response('Created foo');
    }
	
	
	public function showAction()
	{
    $foo = $this->getDoctrine()
        ->getRepository('AcmeDemoBundle:Foo')
        ->findAll();

    if (!$foo) {
        throw $this->createNotFoundException(
            'No foos found for id '
        );
    }

    return $this->render(
            'AcmeDemoBundle:Welcome:list.html.twig',
            array('foo' => $foo)
        );
	
    }
}
