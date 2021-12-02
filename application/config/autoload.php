<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();


$autoload['libraries'] = array('ion_auth','database', 'form_validation');


$autoload['drivers'] = array();


$autoload['helper'] = array('url','array', 'recursos','file','string', 'text');


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array('core_model', 'produtos_model','loja_model');
