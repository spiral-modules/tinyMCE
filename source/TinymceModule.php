<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */
namespace Spiral;

use Spiral\Core\DirectoriesInterface;
use Spiral\Modules\ModuleInterface;
use Spiral\Modules\PublisherInterface;
use Spiral\Modules\RegistratorInterface;

class TinymceModule implements ModuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(RegistratorInterface $registrator)
    {
        $registrator->configure('views', 'namespaces.spiral', 'spiral/tinymce', [
            "directory('libraries') . 'spiral/tinymce/source/views/',",
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function publish(PublisherInterface $publisher, DirectoriesInterface $directories)
    {
        $publisher->publishDirectory(
            __DIR__ . '/../resources',                        //js, css
            $directories->directory('public') . 'resources',  //Expected directory in webroot
            PublisherInterface::OVERWRITE                     //We can safely overwrite resources
        );
    }
}
