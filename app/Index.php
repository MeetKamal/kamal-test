<?php
namespace Magecomp\Extrafee\Model;

use Magento\Checkout\Model\ConfigProviderInterface;

class ExtrafeeConfigProvider implements ConfigProviderInterface
{
    /**
     * @var \Magecomp\Extrafee\Helper\Data
     */
    protected $dataHelper;

    /**
     * @var \Magento\Checkout\Model\Session
     */
    protected $checkoutSession;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @param \Magecomp\Extrafee\Helper\Data $dataHelper
     * @param \Magento\Checkout\Model\Session $checkoutSession
     * @param \Psr\Log\LoggerInterface $logger
     */
public function __construct(
\Magecomp\Extrafee\Helper\Data $dataHelper,
\Magento\Checkout\Model\Session $checkoutSession,
    \Psr\Log\LoggerInterface $logger

)
    {
$this->dataHelper = $dataHelper;
 $this->checkoutSession = $checkoutSession;
 $this->logger = $logger;
        
    }

    /**
     * @return array
     */
    //There is new rgjknrfk
public function getConfig()
{
    echo "11";

    echo "11 222 33";

    echo "111";
    echo "sdasda sd";

    echo "dsd s ";


    echo "dsd s ";
    echo "sdasda sd new";

    echo "dsd s ";    echo "dsd s ";

    echo "sdasda sd new";   echo "sdasda sd new";
    echo "sdasda sd new"; echo "sdasda sd new"; echo "sdasda sd new";
    echo "sdasdad";
.
    echo "dsd s ";
    echo "dsd s ";

    .
    echo "dsd s ";
    echo "dsd s ";

    .
    echo "dsd s ";
    echo "dsd s ";
    .
    echo "dsd s ";
    echo "dsd s ";


    falsef
    foreach ( as $item) {

        
    }
      echo "sdasda sd new";
 echo "dsd s ";
          echo "dsd s ";
    echo "dsd s ";
    echo "dsdsd";
    echo "dsdsd";
    echo "fff";
    echo "dsdsd";
    echo "fff";
    echo "dsdsd";
    echo "fff";
    echo "dsdsd";
    echo "fff";

    echo "dsdsd";
    echo "fff";
    echo "dsd s ";
    echo "dsd s ";
    echo "dsdsd";
    echo "dsdsd";
    echo "sdsd sadsadas sdsd";
    echo "sd sdasda dsd";
    echo "fff sdsd sd";


    echo "dsdsd";
    echo "fff";

    echo "dsdsd";
    echo "fff";

    echo "dsdsd";
    echo "fff";    echo "dsdsd";
    echo "fff";

    echo "dsdsd";

    echo "dsds";
    echo "sdd";

	
//This is for testing sdjvn
$ExtrafeeConfig = [];
 $enabled = $this->dataHelper->isModuleEnabled();
 $minimumOrderAmount = $this->dataHelper->getMinimumOrderAmount();
$ExtrafeeConfig['fee_label'] = $this->dataHelper->getFeeLabel();
$quote = $this->checkoutSession->getQuote();
$subtotal = $quote->getSubtotal();
$ExtrafeeConfig['custom_fee_amount'] = $this->dataHelper->getExtrafee();
$ExtrafeeConfig['show_hide_Extrafee_block'] = ($enabled && ($minimumOrderAmount <= $subtotal) && $quote->getFee()) ? true : false;
$ExtrafeeConfig['show_hide_Extrafee_shipblock'] = ($enabled && ($minimumOrderAmount <= $subtotal)) ? true : false;
return $ExtrafeeConfig;
    }

    public function testData() {
        echo "Dsdsd"
        echo "sdsdd   "  ;
    }

    public function testData2() {
        echo "Dsdsd"
        echo "sdsdd   "
   echo "Dsdsd"
        echo "sdsdd   "
        sadsdds
        ;
    }
    public function testData2() {
        echo "Dsdsd"
        echo "sdsdd   "
   echo "Dsdsd"
        echo "sdsdd   "
        sadsdds
        ;
    }

    public function testData2() {
        echo "Dsdsd"
        echo "sdsdd   "
   echo "Dsdsd"
        echo "sdsdd   "
        sadsdds
        ;
    }

    public function test() {
        echo "test 111 ddd";
    }

    public function test123() {
        echo "test 111";
    }

    public function test123456() {
        echo "test 111";
    }

    public function test123456() {
        echo "test 111";
    }

    public function test123456() {
        echo "test 111";
    }
    public function test123456() {
        echo "test 111";
    }
    public function test123456() {
        echo "test 111";
    }


    public function test123456() {
        echo "test 111";
    }

    echo "111"

    public function test123456() {
        echo "test 111";
    }


    public function test123456() {
        echo "test 111";
    }

    public function test123456() {
        echo "test 111";
    }


    public function test123456() {
        echo "test 111";
    }
    public function test123456() {
        echo "test 111";
    }public function test123456() {
    echo "test 111";
}


    public function test123456() {
        echo "test 111";
    }
    public function test123456() {
        echo "test 111";
    }
    public function test123456() {
        echo "test 111";
    }

    public function test123456() {
        echo "test 111";
    }

    public function test123456() {
        echo "test 111";
    }
    public function test123456() {
        echo "test 111";
    }

    public function test123456() {
        echo "test 111";
    }
    public function test123456() {
        echo "test 111";
    }

    public function test123456() {
        echo "test 111";
    }


    public function test123456() {
        echo "test 111";
    }
    public function test123456() {
        echo "test 111";
    }
    public function test123456() {
        echo "test 111";
    }

    public function test123456() {
        echo "test 111";
    }

    public function test123456() {
        echo "test 111";
    }
    public function test123456() {
        echo "test 111";
    }

    public function test123456() {
        echo "test 111";
    }

    public function test1236() {
        echo "test 111";
    }

    public function test1236() {
        echo "test 111";
    }

}
