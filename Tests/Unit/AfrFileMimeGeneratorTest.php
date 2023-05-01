<?php

namespace Unit;

use Autoframe\Components\FileMime\Exception\AfrFileSystemMimeException;
use Autoframe\Components\FileMime\AfrFileMimeGeneratorTrait;
use PHPUnit\Framework\TestCase;

class AfrFileMimeGeneratorTest extends TestCase
{
    use AfrFileMimeGeneratorTrait;

    function initFileMimeParseMimeTypesDataProvider(): array
    {
        echo __CLASS__ . '->' . __FUNCTION__ . PHP_EOL;

        return [[ $this->getUpdatedMimeTypesFromRepo(0) ]];
    }

    /**
     * @test
     * @dataProvider initFileMimeParseMimeTypesDataProvider
     */
    public function initFileMimeParseMimeTypesTest(bool $bUpdated): void
    {
        $this->assertSame(
            true,
            $bUpdated,
            'Error when running update mime.types on AfrFileMimeGenerator->getUpdatedMimeTypesFromRepo()'
        );

        $iTsMimes = 0;
        $sErr = '';
        try {
            $iTsMimes = $this->initFileMimeParseMimeTypes();

        } catch (AfrFileSystemMimeException $e) {
            $sErr = $e->getMessage() . ";\n" . $e->getTraceAsString();
        }
        if (!$iTsMimes) {
            $this->assertSame(
                1,
                0,
                $sErr
            );
        } else {
            $this->assertGreaterThan(
                $iTsMimes-1,
                time(),
                'mime.types has a future timestamp, so the mime classes will be always regenerated!'
            );
        }
    }

}