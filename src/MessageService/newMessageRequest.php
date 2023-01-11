<?php

namespace Emgag\VGWort\MessageService;

class newMessageRequest
{

    /**
     * @var Parties $parties
     */
    protected $parties = null;

    /**
     * @var MessageText $messagetext
     */
    protected $messagetext = null;

    /**
     * @var Webranges $webranges
     */
    protected $webranges = null;

    /**
     * @var boolean
     */
    protected $reproductionRight;

    /**
     * @var boolean
     */
    protected $distributionRight;

    /**
     * @var boolean
     */
    protected $publicAccessRight;

    /**
     * @var boolean
     */
    protected $otherRightsOfPublicReproduction;

    /**
     * @var boolean
     */
    protected $rightsGrantedConfirmation;

    /**
     * @var boolean
     */
    protected $withoutOwnParticipation;

    /**
     * @var pixelIDType $privateidentificationid
     */
    protected $privateidentificationid = null;

    /**
     * @param Parties $parties
     * @param MessageText $messagetext
     * @param Webranges $webranges
     * @param pixelIDType $privateidentificationid
     */
    public function __construct($parties, $messagetext, $webranges, $reproductionRight, $distributionRight, $publicAccessRight,
                                $otherRightsOfPublicReproduction, $rightsGrantedConfirmation, $withoutOwnParticipation, $privateidentificationid)
    {
      $this->parties = $parties;
      $this->messagetext = $messagetext;
      $this->webranges = $webranges;
      $this->distributionRight = $distributionRight;
      $this->reproductionRight = $reproductionRight;
      $this->publicAccessRight = $publicAccessRight;
      $this->privateidentificationid = $privateidentificationid;
      $this->otherRightsOfPublicReproduction = $otherRightsOfPublicReproduction;
      $this->rightsGrantedConfirmation = $rightsGrantedConfirmation;
      $this->withoutOwnParticipation = $withoutOwnParticipation;
    }

    /**
     * @return Parties
     */
    public function getParties()
    {
      return $this->parties;
    }

    /**
     * @param Parties $parties
     * @return \Emgag\VGWort\MessageService\newMessageRequest
     */
    public function setParties($parties)
    {
      $this->parties = $parties;
      return $this;
    }

    /**
     * @return MessageText
     */
    public function getMessagetext()
    {
      return $this->messagetext;
    }

    /**
     * @param MessageText $messagetext
     * @return \Emgag\VGWort\MessageService\newMessageRequest
     */
    public function setMessagetext($messagetext)
    {
      $this->messagetext = $messagetext;
      return $this;
    }

    /**
     * @return Webranges
     */
    public function getWebranges()
    {
      return $this->webranges;
    }

    /**
     * @param Webranges $webranges
     * @return \Emgag\VGWort\MessageService\newMessageRequest
     */
    public function setWebranges($webranges)
    {
      $this->webranges = $webranges;
      return $this;
    }

    /**
     * @return pixelIDType
     */
    public function getPrivateidentificationid()
    {
      return $this->privateidentificationid;
    }

    /**
     * @param pixelIDType $privateidentificationid
     * @return \Emgag\VGWort\MessageService\newMessageRequest
     */
    public function setPrivateidentificationid($privateidentificationid)
    {
      $this->privateidentificationid = $privateidentificationid;
      return $this;
    }

    /**
     * @return bool
     */
    public function getReproductionRight(): bool
    {
        return $this->reproductionRight;
    }

    /**
     * @return bool
     */
    public function getDistributionRight(): bool
    {
        return $this->distributionRight;
    }

    /**
     * @return bool
     */
    public function isPublicAccessRight(): bool
    {
        return $this->publicAccessRight;
    }

    /**
     * @return bool
     */
    public function isOtherRightsOfPublicReproduction(): bool
    {
        return $this->otherRightsOfPublicReproduction;
    }

    /**
     * @param bool $reproductionRight
     */
    public function setReproductionRight(bool $reproductionRight): void
    {
        $this->reproductionRight = $reproductionRight;
    }

    /**
     * @param bool $distributionRight
     */
    public function setDistributionRight(bool $distributionRight): void
    {
        $this->distributionRight = $distributionRight;
    }

    /**
     * @param bool $publicAccessRight
     */
    public function setPublicAccessRight(bool $publicAccessRight): void
    {
        $this->publicAccessRight = $publicAccessRight;
    }

    /**
     * @param bool $otherRightsOfPublicReproduction
     */
    public function setOtherRightsOfPublicReproduction(bool $otherRightsOfPublicReproduction): void
    {
        $this->otherRightsOfPublicReproduction = $otherRightsOfPublicReproduction;
    }

    /**
     * @param bool $rightsGrantedConfirmation
     */
    public function setRightsGrantedConfirmation(bool $rightsGrantedConfirmation): void
    {
        $this->rightsGrantedConfirmation = $rightsGrantedConfirmation;
    }

    /**
     * @param bool $withoutOwnParticipation
     */
    public function setWithoutOwnParticipation(bool $withoutOwnParticipation): void
    {
        $this->withoutOwnParticipation = $withoutOwnParticipation;
    }

}
