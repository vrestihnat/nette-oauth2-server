<?php
namespace Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAccessTokenScopes
 *
 * @ORM\Table(name="oauth_access_token_scopes", indexes={@ORM\Index(name="access_token", columns={"access_token"}), @ORM\Index(name="scope", columns={"scope"})})
 * @ORM\Entity
 */
class OauthAccessTokenScopes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \OauthAccessTokens
     *
     * @ORM\ManyToOne(targetEntity="OauthAccessTokens")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="access_token", referencedColumnName="access_token")
     * })
     */
    private $accessToken;

    /**
     * @var \OauthScopes
     *
     * @ORM\ManyToOne(targetEntity="OauthScopes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="scope", referencedColumnName="id")
     * })
     */
    private $scope;


}
