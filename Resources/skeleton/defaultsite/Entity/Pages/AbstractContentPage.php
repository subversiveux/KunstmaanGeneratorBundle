<?php

namespace {{ namespace }}\Entity\Pages;

use Symfony\Component\Form\AbstractType;

use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\PagePartBundle\Helper\HasPagePartsInterface;
use Kunstmaan\PagePartBundle\PagePartAdmin\AbstractPagePartAdminConfigurator;
use {{ namespace }}\Form\Pages\AbstractContentPageAdminType;
use {{ namespace }}\PagePartAdmin\BannerPagePartAdminConfigurator;
use {{ namespace }}\PagePartAdmin\AbstractContentPagePagePartAdminConfigurator;

/**
 * An abstract ContentPage class which holds the standard configuration for content pages
 */
class AbstractContentPage extends AbstractPage implements HasPagePartsInterface
{

    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new AbstractContentPageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array (
            array(
                'name' => 'ContentPage',
                'class'=> "{{ namespace }}\Entity\Pages\ContentPage"
            ),
            array(
                'name' => 'FormPage',
                'class'=> "{{ namespace }}\Entity\Pages\FormPage"
            )
        );
    }

    /**
     * @return AbstractPagePartAdminConfigurator[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array(new AbstractContentPagePagePartAdminConfigurator(), new BannerPagePartAdminConfigurator());
    }

    /**
     * return string
     */
    public function getDefaultView()
    {
        return "{{ bundle.getName() }}:Pages\AbstractContentPage:view.html.twig";
    }

}
