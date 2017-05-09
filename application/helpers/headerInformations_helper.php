<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Lekrashar CodeIgniter header Informations Helper
 */

// ------------------------------------------------------------------------
// HEADER'S FUNCTIONS

/**
 * Initialisation of the HTML HEADER
 *
 * @access  public
 * @return  strings array
 */
if ( ! function_exists('init_header'))
{
    function init_header($lang = null, $title = null, $charset = null)
    {
        //return the header base informations
        return array('lang' => $lang,
				'title' => $title,
				'charset' => $charset);
    }
}

if ( ! function_exists('header_dcterms'))
{
/**
 * Addition of the HTML DCTERMS
 *
 * @access  public
 * @return  strings array
 */
	function header_dcterms($creator = null, $subject = null, $created = null)
	{
		//return the header DCTERMS
		return array('creator' => $creator,
				'subject' => $subject,
				'created' => $created);
	}
}
/* end of file headerInformations_helper.php */