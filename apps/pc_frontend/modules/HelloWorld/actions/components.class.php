<?php

/**
* This file is part of the OpenPNE package.
* (c) OpenPNE Project (http://www.openpne.jp/)
*
* For the full copyright and license information, please view the LICENSE
 file and the NOTICE file that were distributed with this source code.
*/

/*class helloworldComponents extends sfComponents
{
/*  protected function checkUserAgent()
  {
  $this->isIE6 = true;
  $userAgent = getenv("HTTP_USER_AGENT");
    if(preg_match('/MSIE\s?[5-6]\.[05]/', $userAgent))
      {
      $this->isIE6 = true;
      }
  }
  public function executeHelloSide(sfWebRequest $request)
    {
    $this->checkUserAgent();
    }
  public function executeHelloWorld(sfWebRequest $request)
    {
   /* $this->checkUserAgent();
    }
}*/

class helloworldComponents extends opHelloWorldPluginHelloWorldComponents
{
}
