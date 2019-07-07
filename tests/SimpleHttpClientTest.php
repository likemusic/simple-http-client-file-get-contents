<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Likemusic\SimpleHttpClientFopen\SimpleHttpClient;

/**
 * Class SimpleHttpClientTest
 */
final class SimpleHttpClientTest extends TestCase
{
    const DEFAULT_URL = 'http://example.com/';
    const DEFAULT_URL_REFERENCE_CONTENT_FILENAME = 'tests/Fixtures/example.com.html';

    public function testGetUrlContent():void
    {
        $client = new SimpleHttpClient();
        $urlContent = $client->getUrlContent(self::DEFAULT_URL);
        $referenceContent = $this->getReferenceContent();

        $this->assertEquals($referenceContent, $urlContent);
    }

    /**
     * @return string
     */
    private function getReferenceContent()
    {
        return file_get_contents(self::DEFAULT_URL_REFERENCE_CONTENT_FILENAME);
    }
}
