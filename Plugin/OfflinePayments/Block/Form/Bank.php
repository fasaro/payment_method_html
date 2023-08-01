class Bank
{
    public function beforeToHtml(\Magento\OfflinePayments\Block\Form\Banktransfer $subject)
    {
        $subject->setTemplate('fasaro_payment_method_html::banktransfer.phtml');
    }
}
