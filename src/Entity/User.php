<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(
 *  fields="email",
 *  message="This email is already being used !"
 * )
 * @UniqueEntity(
 *  fields="username",
 *  message="This Username is taken !"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email",
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 4,
     *      max = 20,
     *      minMessage = "Your username must be atleast {{ limit }} characters",
     *      maxMessage = "Your username must be at most {{ limit }} characters",
     * )
     * @Assert\Type(
     *      type="alnum",
     *      message="Your username can only contain letters and digits"
     * )
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 8,
     *      minMessage = "Your password must be atleast {{ limit }} characters",
     * )
     * @Assert\NotCompromisedPassword
     */
    private $password;

    /**
     * @Assert\EqualTo
     *      (propertyPath="password", message="Your passwords do not match !")
     */
    public $confirm_password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function eraseCredentials() {}

    public function getSalt() {}

    public function getRoles() {
        return ['ROLE_USER'];
    }
}
