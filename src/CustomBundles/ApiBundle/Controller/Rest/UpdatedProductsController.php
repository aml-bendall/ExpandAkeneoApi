<?php
namespace CustomBundles\ApiBundle\Controller\Rest;
use FOS\RestBundle\Controller\Annotations\NamePrefix;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Pim\Bundle\CatalogBundle\Model\ProductInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
/**
 * Product API controller
 *
 * @author    Filips Alpe <filips@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 * @RouteResource("updatedproducts")
 * @NamePrefix("oro_api_")
 */
class UpdatedProductsController extends FOSRestController
{
    /**
     * Get products
     *
     * @param Request $request
     *
     * @ApiDoc(
     *      description="Get a single product",
     *      resource=true
     * )
     *
     * @return Response
     */
    public function getAction(Request $request)
    {
        $userContext       = $this->get('pim_user.context.user');
       
        return json_enocde('Hello World');
    }
}
