<?php
namespace PhpWord\Tests\Section;

use PhpOffice\PhpWord\Section\Object;

class ObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructWithSupportedFiles()
    {
        $src = \join(
            \DIRECTORY_SEPARATOR,
            array(\PHPWORD_TESTS_BASE_DIR, 'data', 'documents', 'sheet.xls')
        );
        $oObject = new Object($src);

        $this->assertInstanceOf('PhpOffice\\PhpWord\\Section\\Object', $oObject);
        $this->assertInstanceOf('PhpOffice\\PhpWord\\Style\\Image', $oObject->getStyle());
        $this->assertEquals($oObject->getSource(), $src);
    }

    public function testConstructWithNotSupportedFiles()
    {
        $src = \join(
            \DIRECTORY_SEPARATOR,
            array(\PHPWORD_TESTS_BASE_DIR, 'data', 'xsl', 'passthrough.xsl')
        );
        $oObject = new Object($src);

        $this->assertInstanceOf('PhpOffice\\PhpWord\\Section\\Object', $oObject);
        $this->assertEquals($oObject->getSource(), null);
        $this->assertEquals($oObject->getStyle(), null);
    }

    public function testConstructWithSupportedFilesAndStyle()
    {
        $src = \join(
            \DIRECTORY_SEPARATOR,
            array(\PHPWORD_TESTS_BASE_DIR, 'data', 'documents', 'sheet.xls')
        );
        $oObject = new Object($src, array('width' => '230px'));

        $this->assertInstanceOf('PhpOffice\\PhpWord\\Section\\Object', $oObject);
        $this->assertInstanceOf('PhpOffice\\PhpWord\\Style\\Image', $oObject->getStyle());
        $this->assertEquals($oObject->getSource(), $src);
    }

    public function testRelationId()
    {
        $src = \join(
            \DIRECTORY_SEPARATOR,
            array(\PHPWORD_TESTS_BASE_DIR, 'data', 'documents', 'sheet.xls')
        );
        $oObject = new Object($src);

        $iVal = rand(1, 1000);
        $oObject->setRelationId($iVal);
        $this->assertEquals($oObject->getRelationId(), $iVal);
    }

    public function testImageRelationId()
    {
        $src = \join(
            \DIRECTORY_SEPARATOR,
            array(\PHPWORD_TESTS_BASE_DIR, 'data', 'documents', 'sheet.xls')
        );
        $oObject = new Object($src);

        $iVal = rand(1, 1000);
        $oObject->setImageRelationId($iVal);
        $this->assertEquals($oObject->getImageRelationId(), $iVal);
    }

    public function testObjectId()
    {
        $src = \join(
            \DIRECTORY_SEPARATOR,
            array(\PHPWORD_TESTS_BASE_DIR, 'data', 'documents', 'sheet.xls')
        );
        $oObject = new Object($src);

        $iVal = rand(1, 1000);
        $oObject->setObjectId($iVal);
        $this->assertEquals($oObject->getObjectId(), $iVal);
    }
}