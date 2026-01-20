<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class LanguageCurrencySwitch extends Module
{
    public function __construct()
    {
        $this->name = 'languagecurrencyswitch';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'markoo';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = ['min' => '1.7.0.0', 'max' => _PS_VERSION_];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Language to Currency Auto-Switcher');
        $this->description = $this->l('Automatically switches currency based on the selected language (HU -> HUF, RO -> RON).');
    }

    public function install()
    {
        // Regisztráljuk a modult és a hook-ot, ami minden oldalbetöltéskor lefut
        return parent::install() && $this->registerHook('actionFrontControllerAfterInit');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    /**
     * Ez a funkció fut le minden oldalbetöltés elején
     */
    public function hookActionFrontControllerAfterInit($params)
    {
        // Csak a vásárlói oldalon fusson, az adminban ne
        if ($this->context->controller->controller_type != 'front') {
            return;
        }

        $current_lang = $this->context->language->iso_code;
        $current_currency = $this->context->currency->iso_code;

        // LOGIKA: MAGYAR NYELV -> FORINT
        if ($current_lang == 'hu' && $current_currency != 'HUF') {
            $this->setCurrencyByIso('HUF');
        } 
        // LOGIKA: ROMÁN NYELV -> RON
        elseif ($current_lang == 'ro' && $current_currency != 'RON') {
            $this->setCurrencyByIso('RON');
        }
    }

    /**
     * Segédfüggvény a pénznem kényszerített átváltásához
     */
    private function setCurrencyByIso($iso_code)
    {
        $id_currency = (int)Currency::getIdByIsoCode($iso_code);
        
        if ($id_currency) {
            // Beállítjuk a sütit (cookie), hogy megjegyezze a választást
            $this->context->cookie->id_currency = $id_currency;
            $this->context->currency = new Currency($id_currency);
            
            // Ha van kosár, abban is át kell váltani a pénznemet
            if (isset($this->context->cart) && $this->context->cart->id) {
                $this->context->cart->id_currency = $id_currency;
                $this->context->cart->update();
            }
        }
    }
}
