<?php
namespace MicroCMS\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;



class ContactController extends AbstractType
{
	public function contactAction(Request $request, Application $app)
	{
		$form = $app['form.factory']->createBuilder(FormType::class)
		    ->add('name', TextType::class, array(
		    	'required' => true,
		        'constraints' => array(new Assert\NotBlank(), new Assert\Length(array('min' => 3)))
		    ))
		    ->add('email', TextType::class, array(
		    	'required' => true,
		        'constraints' => array(new Assert\Email(), new Assert\NotBlank())
		    ))
		    ->add('message', TextareaType::class, array(
		        'required' => true,
		        'constraints' => array(new Assert\NotBlank(), new Assert\Length(array('min' => 10)))
		    ))
/*            ->add('submit', SubmitType::class, [
                'label' => 'Save',
            ])*/
            
            
		    ->getForm();
		if ( 'POST' == $request->getMethod() )
		{
            
            
		}
		return $app['twig']->render('contact.html.twig', array(
			'page'  => 'contact',
			'title' => 'Me contacter',
			'form'  => $form->createView(),
		));
        $app->post('/contact', function (Request $request) {
        $message = $request->get('message');
        mail('carole.ambert@lepoles.com', '[YourSite] Feedback', $message);

    return new Response('Thank you for your feedback!', 201);
});
	}
}