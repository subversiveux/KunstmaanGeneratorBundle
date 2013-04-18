<?php

namespace {{ namespace }}\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;

use {{ namespace }}\Form\Pages\ContentPageAdminType;

/**
 * ContentPage
 *
 * @ORM\Entity()
 * @ORM\Table(name="{{ prefix }}content_pages")
 */
class ContentPage extends AbstractContentPage
{

    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new ContentPageAdminType();
    }

}
