<?php

/**
 * Label form.
 *
 * @package    chiptunedb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LabelForm extends BaseLabelForm {

    public function configure() {
        unset($this['created_at']);
        unset($this['updated_at']);
    }

}