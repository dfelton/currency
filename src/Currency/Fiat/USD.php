<?php
namespace Currency\Fiat;

class USD extends AbstractFiat
{
    const CURRENCY_NAME          = 'US Dollar';
    const MAIN_UNIT              = 'Dollar';
    const MAIN_UNIT_ABBREVIATION = 'USD';
    const SUB_UNIT               = 'Cent';
    const DENOMINATION           = 2;
    const PAIR_IDENTIFIER        = 'usd';
    const CACHE_IDENTIFIER       = 'usd';
}