<?php
namespace Slack\Tests;

use Slack\User;

class UserTest extends TestCase
{
    public function testUsername()
    {
        $username = $this->faker->userName;

        $user = new User($this->client, [
            'name' => $username,
        ]);

        $this->assertEquals($username, $user->getUsername());
    }

    public function testFirstName()
    {
        $firstName = $this->faker->firstName;

        $user = new User($this->client, [
            'profile' => [
                'first_name' => $firstName,
            ],
        ]);

        $this->assertEquals($firstName, $user->getFirstName());
    }

    public function testLastName()
    {
        $lastName = $this->faker->lastName;

        $user = new User($this->client, [
            'profile' => [
                'last_name' => $lastName,
            ],
        ]);

        $this->assertEquals($lastName, $user->getLastName());
    }

    public function testRealName()
    {
        $name = $this->faker->name;

        $user = new User($this->client, [
            'profile' => [
                'real_name' => $name,
            ],
        ]);

        $this->assertEquals($name, $user->getRealName());
    }

    public function testEmail()
    {
        $email = $this->faker->email;

        $user = new User($this->client, [
            'profile' => [
                'email' => $email,
            ],
        ]);

        $this->assertEquals($email, $user->getEmail());
    }

    public function testPhone()
    {
        $phone = $this->faker->phoneNumber;

        $user = new User($this->client, [
            'profile' => [
                'phone' => $phone,
            ],
        ]);

        $this->assertEquals($phone, $user->getPhone());
    }

    public function testSkype()
    {
        $name = $this->faker->userName;

        $user = new User($this->client, [
            'profile' => [
                'skype' => $name,
            ],
        ]);

        $this->assertEquals($name, $user->getSkype());
    }

    public function testIsAdmin()
    {
        $is = $this->faker->boolean;

        $user = new User($this->client, [
            'is_admin' => $is,
        ]);

        $this->assertEquals($is, $user->isAdmin());
    }

    public function testIsOwner()
    {
        $is = $this->faker->boolean;

        $user = new User($this->client, [
            'is_owner' => $is,
        ]);

        $this->assertEquals($is, $user->isOwner());
    }

    public function testIsPrimaryOwner()
    {
        $is = $this->faker->boolean;

        $user = new User($this->client, [
            'is_primary_owner' => $is,
        ]);

        $this->assertEquals($is, $user->isPrimaryOwner());
    }

    public function testGetPresence()
    {
        $presence = $this->faker->boolean ? 'active' : 'away';

        $user = new User($this->client, [
            'id' => $this->faker->uuid,
        ]);

        $this->mockResponse(200, null, [
            'ok' => true,
            'presence' => $presence,
        ]);

        $this->watchPromise($user->getPresence()->then(function ($actual) use ($presence) {
            $this->assertEquals($presence, $actual);
        }));
    }

    public function testId()
    {
        $id = $this->faker->word;

        $user = new User($this->client, [
            'id' => $id,
        ]);

        $this->assertEquals($id, $user->getId());
    }

    public function testIsDeleted()
    {
        $is = $this->faker->boolean;

        $user = new User($this->client, [
            'deleted' => $is,
        ]);

        $this->assertEquals($is, $user->isDeleted());
    }

    public function testProfileImage24()
    {
        $image = $this->faker->imageUrl(24, 24);

        $user = new User($this->client, [
            'profile' => [
                'image_24' => $image,
            ],
        ]);

        $this->assertEquals($image, $user->getProfileImage24());
    }

    public function testProfileImage32()
    {
        $image = $this->faker->imageUrl(32, 32);

        $user = new User($this->client, [
            'profile' => [
                'image_32' => $image,
            ],
        ]);

        $this->assertEquals($image, $user->getProfileImage32());
    }

    public function testProfileImage48()
    {
        $image = $this->faker->imageUrl(48, 48);

        $user = new User($this->client, [
            'profile' => [
                'image_48' => $image,
            ],
        ]);

        $this->assertEquals($image, $user->getProfileImage48());
    }

    public function testProfileImage72()
    {
        $image = $this->faker->imageUrl(72, 72);

        $user = new User($this->client, [
            'profile' => [
                'image_72' => $image,
            ],
        ]);

        $this->assertEquals($image, $user->getProfileImage72());
    }

    public function testProfileImage192()
    {
        $image = $this->faker->imageUrl(192, 192);

        $user = new User($this->client, [
            'profile' => [
                'image_192' => $image,
            ],
        ]);

        $this->assertEquals($image, $user->getProfileImage192());
    }

    public function testStatusText()
    {
        $status = $this->faker->words();

        $user = new User($this->client, [
            'profile' => [
                'status_text' => $status,
            ],
        ]);

        $this->assertEquals($status, $user->getStatusText());
    }

    public function testStatusEmoji()
    {
        $emoji = ':' . $this->faker->word . ':';

        $user = new User($this->client, [
            'profile' => [
                'status_emoji' => $emoji,
            ],
        ]);

        $this->assertEquals($emoji, $user->getStatusEmoji());
    }

    public function testColor()
    {
        $color = str_replace('#', '', $this->faker->hexColor);

        $user = new User($this->client, [
            'color' => $color,
        ]);

        $this->assertEquals($color, $user->getColor());
    }

    public function testUpdated()
    {
        $timestamp = time();

        $user = new User($this->client, [
            'updated' => $timestamp,
        ]);

        $this->assertEquals($timestamp, $user->getUpdated());
    }
}
