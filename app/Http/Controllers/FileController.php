<?php

namespace App\Http\Controllers;

use Spatie\PdfToText\Pdf;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\IOFactory as Word;
use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpSpreadsheet\IOFactory as XLSX;
use PhpOffice\PhpPresentation\IOFactory as PPTX;

class FileController extends Controller
{
    public function getFile(Request $request){
        $msg = '';
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName() ?? '';
        $type = $file->getClientOriginalExtension() ?? null;
        try {
            $success = true;

            if ($type == 'txt') {
                $text = file_get_contents($file);
                $wordCount = str_word_count($text);

            }elseif ($type == 'docx') {
                // Get the total word count
                $phpWord = Word::load($file);
                // Get all the text from the document
                $text = '';
                foreach ($phpWord->getSections() as $section) {
                    foreach ($section->getElements() as $element) {
                        if ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
                            foreach ($element->getElements() as $textElement) {
                                if ($textElement instanceof \PhpOffice\PhpWord\Element\Text) {
                                    $text .= $textElement->getText() . ' ';
                                }
                            }
                        }
                    }
                }

                // Count the words in the text
                $wordCount = str_word_count($text, 0, '0123456789');

            }elseif ($type == 'xlsx') {
                // Get the total word count
                $spreadsheet = XLSX::load($file);
                $worksheet = $spreadsheet->getActiveSheet();

                // Initialize the word count variable
                $wordCount = 0;

                // Iterate through all cells containing text
                foreach ($worksheet->getRowIterator() as $row) {
                    foreach ($row->getCellIterator() as $cell) {
                        // Check if the cell contains text
                        if (!empty($cell->getValue())) {
                            // Count words in the cell and add to the total word count
                            $wordCount += str_word_count($cell->getValue());
                        }
                    }
                }

            }elseif ($type == 'html') {
                $html = file_get_contents($file);
                $wordCount = str_word_count(strip_tags($html));


            }elseif ($type == 'xml') {
                $xml = simplexml_load_file($file);
                $wordCount = str_word_count(strip_tags($xml->asXML()));




            }elseif ($type == 'json') {
                $json = json_decode(file_get_contents($file), true);
                $text = implode(' ', $json);
                $wordCount = str_word_count($text);


            // }elseif ($type == 'pdf') {
            //     // Use spatie/pdf-to-text to extract text from the PDF
            //     $text = (new Pdf())->setPdf($file)->text();

            //     // Count the words in the extracted text
            //     $wordCount = str_word_count($text);


            }elseif ($type == 'csv') {
                $csvFile = fopen($file, 'r');
                $wordCount = 0;

                while (($data = fgetcsv($csvFile)) !== false) {
                    foreach ($data as $value) {
                        $wordCount += str_word_count($value);
                    }
                }

                fclose($csvFile);

            }else{
                $wordCount = 0;
                $msg = "." . $type. " type file is not supported in this version";
                $success = false;

            }

            return response()->json([
                'word_ount' => $wordCount,
                'msg' => $msg,
                'type' => $type,
                'success' => $success,
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'word_ount' => 0,
                'msg' => $th->getMessage(),
                'type' => $type,
                'success' => false,
            ]);
        }
    }


    public function countWordsInDoc($filePath)
    {
        try {
            // Load the .doc file
            $phpWord = IOFactory::load($filePath);

            // Get the total word count
            $wordCount = $phpWord->getWordCount();

            return $wordCount;
        } catch (\Exception $e) {
            return 0; // Return 0 in case of an error or if the file format is not supported
        }
    }
}
