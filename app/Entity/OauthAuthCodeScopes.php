<?php
namespace Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAuthCodeScopes
 *
 * @ORM\Table(name="oauth_auth_code_scopes", indexes={@ORM\Index(name="auth_code", columns={"auth_code"}), @ORM\Index(name="scope", columns={"scope"})})
 * @ORM\Entity
 */
class OauthAuthCodeScopes
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
     * @var \OauthAuthCodes
     *
     * @ORM\ManyToOne(targetEntity="OauthAuthCodes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auth_code", referencedColumnName="auth_code")
     * })
     */
    private $authCode;

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
