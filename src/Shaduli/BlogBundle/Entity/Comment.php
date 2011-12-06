<?php

namespace Shaduli\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shaduli\BlogBundle\Entity\Comment
 */
class Comment
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $post_id
     */
    private $post_id;

    /**
     * @var string $author
     */
    private $author;

    /**
     * @var string $author_email
     */
    private $author_email;

    /**
     * @var string $author_url
     */
    private $author_url;

    /**
     * @var string $author_ip
     */
    private $author_ip;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set post_id
     *
     * @param integer $postId
     */
    public function setPostId($postId)
    {
        $this->post_id = $postId;
    }

    /**
     * Get post_id
     *
     * @return integer 
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * Set author
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set author_email
     *
     * @param string $authorEmail
     */
    public function setAuthorEmail($authorEmail)
    {
        $this->author_email = $authorEmail;
    }

    /**
     * Get author_email
     *
     * @return string 
     */
    public function getAuthorEmail()
    {
        return $this->author_email;
    }

    /**
     * Set author_url
     *
     * @param string $authorUrl
     */
    public function setAuthorUrl($authorUrl)
    {
        $this->author_url = $authorUrl;
    }

    /**
     * Get author_url
     *
     * @return string 
     */
    public function getAuthorUrl()
    {
        return $this->author_url;
    }

    /**
     * Set author_ip
     *
     * @param string $authorIp
     */
    public function setAuthorIp($authorIp)
    {
        $this->author_ip = $authorIp;
    }

    /**
     * Get author_ip
     *
     * @return string 
     */
    public function getAuthorIp()
    {
        return $this->author_ip;
    }
}