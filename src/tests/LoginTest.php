<?php
use PHPUnit\Framework\TestCase;

final class LoginTest extends TestCase {
    public function testSaveLogin(): void {
        $login        = new Login;
        $login->username = 'T1';
        $login->password = 'T1';
        $this->assertEquals(true, $login->save());
    }

    public function testUpdateLogin(): void {
        $login           = Login::findLastById();
        $login->username = 'T2';
        $login->password = 'T2';
        $this->assertEquals(true, $login->save());
    }

    public function testDeleteCategory(): void {
        $login       = Login::findLastById();
        $this->assertEquals(true, $login->destroy($login->id));
    }
}
