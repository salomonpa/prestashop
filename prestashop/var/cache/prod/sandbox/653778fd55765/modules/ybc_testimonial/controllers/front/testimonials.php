<?php
/**
 * Copyright YourBestCode.com
 * Email: support@yourbestcode.com
 * First created: 21/12/2015
 * Last updated: NOT YET
*/
if (!defined('_PS_VERSION_'))
	exit;
class Ybc_testimonialTestimonialsModuleFrontController extends ModuleFrontController
{
	public function init()
	{
		parent::init();
	}
	public function initContent()
	{
	    $meta = Meta::getMetaTags($this->context->language->id, 'index');
	    $meta['meta_title'] = $this->module->l('Customer testimonials');        
        $this->context->smarty->assign($meta);
	    $module = new Ybc_testimonial();
		parent::initContent();
        $tmData = $this->getTestimonials();
        $this->context->smarty->assign(
            array(
                'tm_testimonials' => $tmData['testimonials'],
                'tm_paggination' => $tmData['paggination'],
                'path' => $module->getBreadCrumb(),
                'submit_tm_link' => (int)Configuration::get('YBC_TESTIMONIAL_CUSTOMER_COMMENT') ? $this->context->link->getModuleLink('ybc_testimonial', 'submit') : false,
                'allow_rate' => (int)Configuration::get('YBC_TESTIMONIAL_ALLOW_RATE') ? true : false,
            )
        );
        $this->setTemplate('testimonials.tpl');                
	}    
    public function getTestimonials()
    {
        $filter = ' AND t.enabled = 1';            
        $sort = ' t.sort_order asc, t.id_testimonial desc, ';
        $module = new Ybc_testimonial();
        //Paggination
        $page = (int)Tools::getValue('page') && (int)Tools::getValue('page') > 0 ? (int)Tools::getValue('page') : 1;
        $totalRecords = (int)$module->countTestimonialsWithFilter($filter);
        $paggination = new Ybc_testimonial_paggination_class();            
        $paggination->total = $totalRecords;
        $paggination->url = $this->context->link->getModuleLink('ybc_testimonial', 'testimonials',array('page'=>"_page_"));
        $paggination->limit =  (int)Configuration::get('YBC_TESTIMONIAL_ITEMS_PER_PAGE') > 0 ? (int)Configuration::get('YBC_TESTIMONIAL_ITEMS_PER_PAGE') : 20;
        $totalPages = ceil($totalRecords / $paggination->limit);
        if($page > $totalPages)
            $page = $totalPages;
        $paggination->page = $page;
        $start = $paggination->limit * ($page - 1);
        if($start < 0)
            $start = 0;
        $testimonials = $module->getTestimonialsWithFilter($filter, $sort, $start, $paggination->limit);
        if($testimonials)
        {
            foreach($testimonials as &$testimonial)
            {
                if($testimonial['image'])
                {
                    $testimonial['image'] = _MODULE_DIR_.'ybc_testimonial/images/testimonial/'.$testimonial['image'];                    
                }                    
            }                
        }        
        return array(
            'testimonials' => $testimonials , 
            'paggination' => $paggination->render()
        );
    }
}