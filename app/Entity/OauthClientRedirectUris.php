<?php
namespace Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * OauthClientRedirectUris
 *
 * @ORM\Table(name="oauth_client_redirect_uris", indexes={@ORM\Index(name="fk_client_id_idx", columns={"client_id"})})
 * @ORM\Entity
 */
class OauthClientRedirectUris
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
     * @var string
     *
     * @ORM\Column(name="redirect_uri", type="string", length=255, nullable=false)
     */
    private $redirectUri;

    /**
     * @var \OauthClients
     *
     * @ORM\ManyToOne(targetEntity="OauthClients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;


}
