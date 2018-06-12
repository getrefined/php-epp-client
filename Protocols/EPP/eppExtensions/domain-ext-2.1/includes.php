<?php
$this->addExtension('domain-ext', 'http://www.eurid.eu/xml/epp/domain-ext-2.1');

include_once(dirname(__FILE__) . '/eppRequests/euridEppTransferDomainRequest.php');
$this->addCommandResponse('Metaregistrar\EPP\euridEppTransferDomainRequest', 'Metaregistrar\EPP\eppTransferResponse');

include_once(dirname(__FILE__) . '/eppRequests/euridEppCreateDomainRequest.php');
$this->addCommandResponse('Metaregistrar\EPP\euridEppCreateDomainRequest', 'Metaregistrar\EPP\eppCreateResponse');