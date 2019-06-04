<?php
/**
 * @file
 * contains \Drupal\rsvplist\Plugin\Block\RSVPBlock
 */

namespace Drupal\rsvplist\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an 'RSVP List Block
 * @Block(
 * id = "rsvp_block",
 * admin_label = @Translation("RSVP Block"),
 * )
 */

class RSVPBlock extends BlockBase
{
    /**
     * {@inheritdoc}
     */

    public function build()
    {
        return array('#markup' => $this->t('My RSVP List Block'));
    }
}
