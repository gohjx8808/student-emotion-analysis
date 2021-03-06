<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionsController extends Controller
{
    public function saveQTest(Request $request)
    {
        $request->session()->put('QTest', $request->input());

        // dd(session()->all());
        $displayedResult = array();

        array_push($displayedResult, $this->checkMCQ($request->input('QTest_1'), 'c', ''));
        $added = $request->session()->get('QTest');
        $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
        $request->session()->put('QTest', $added);

        // dd(session()->all());
        // dd($displayedResult);

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ1(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q1')) {
            $Qformat = $request->session()->get('Q1')['Qformat'];
        } else {
            // $request->session()->put('counter', $request->session()->get('counter')+ 1);
            $Qformat = rand(1, 4);
        }

        return view('Questions.Q1')->with('Qformat', $Qformat);
    }

    public function saveQ1(Request $request)
    {
        $request->session()->put('Q1', $request->input());

        // dd(session()->all());
        $displayedResult = array();

        $random = $request->input('Qformat');
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q1_1'), 'c', ''));
            $added = $request->session()->get('Q1');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q1', $added);
        } else if ($random == 2 || $random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1A'), 'x'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1B'), 'y'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1C'), 'z'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1D'), 'x'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1E'), 'y'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q1');
            $added['correct'] = strval($correct) . '/5';
            $request->session()->put('Q1', $added);
        } else if ($random == 4) {
            array_push($displayedResult, 'Thank you for the answer. We will look through it.');
        }

        // dd(session()->all());
        // dd($displayedResult);

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ2(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q2')) {
            $Qformat = $request->session()->get('Q2')['Qformat'];
        } else {
            // $request->session()->put('counter', $request->session()->get('counter')+ 1);
            $Qformat = rand(1, 4);
        }

        return view('Questions.Q2')->with('Qformat', $Qformat);
    }

    public function saveQ2(Request $request)
    {
        $request->session()->put('Q2', $request->input());

        // dd(session()->all());
        $displayedResult = array();

        $random = $request->input('Qformat');
        // dd($random);
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q2_1'), 'b', ''));
            $added = $request->session()->get('Q2');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q2', $added);
        } else if ($random == 2) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q2_1A'), 'a'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q2');
            $added['correct'] = strval($correct) . '/1';
            $request->session()->put('Q2', $added);
        } else if ($random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q2_1A'), 'while(x>=0)'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q2');
            $added['correct'] = strval($correct) . '/1';
            $request->session()->put('Q2', $added);
            array_push($displayedResult, 'The appropriate answer is while(x>=0). Your answer is correct as long as it fits the logic.');
            // dd($displayedResult);
        } else if ($random == 4) {
            array_push($displayedResult, 'Thank you for the answer. We will look through it.');
        }

        // dd(session()->all());
        // dd($displayedResult);

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ3(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q3')) {
            $Qformat = $request->session()->get('Q3')['Qformat'];
        } else {
            // $request->session()->put('counter', $request->session()->get('counter')+ 1);
            $Qformat = rand(1, 4);
        }

        return view('Questions.Q3')->with('Qformat', $Qformat);
    }

    public function saveQ3(Request $request)
    {
        $request->session()->put('Q3', $request->except('_token'));
        $displayedResult = array();
        $random = $request->input('Qformat');
        // dd($random);
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q3_1'), 'a', ''));
            $added = $request->session()->get('Q3');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q3', $added);
        } else if ($random == 2 || $random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q3_1A'), 'z'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q3_1B'), 'y'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q3_1C'), 'x'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q3');
            $added['correct'] = strval($correct) . '/3';
            $request->session()->put('Q3', $added);
            // dd($displayedResult);
        } else if ($random == 4) {
            array_push($displayedResult, 'Thank you for the answer. We will look through it.');
        }

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ4(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q4')) {
            $Qformat = $request->session()->get('Q4')['Qformat'];
        } else {
            // $request->session()->put('counter', $request->session()->get('counter')+ 1);
            $Qformat = rand(1, 4);
        }

        return view('Questions.Q4')->with('Qformat', $Qformat);
    }

    public function saveQ4(Request $request)
    {
        $request->session()->put('Q4', $request->except('_token'));
        // dd($request->input());
        $displayedResult = array();
        $random = $request->input('Qformat');
        // dd($random);
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q4_1'), 'c', ''));
            $added = $request->session()->get('Q4');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q4', $added);
        } else if ($random == 2) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q4_1A'), '1'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q4_1B'), 'a'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q4');
            $added['correct'] = strval($correct) . '/2';
            $request->session()->put('Q4', $added);
            // dd($displayedResult);
        } else if ($random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q4_1A'), '1'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q4_1B'), 'n*factorial(n-1)'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q4');
            $added['correct'] = strval($correct) . '/2';
            $request->session()->put('Q4', $added);
            array_push($displayedResult, 'The appropriate answer is 1 and n*factorial(n-1). Your answer is correct as long as it fits the logic.');
            // dd($displayedResult);
        } else if ($random == 4) {
            array_push($displayedResult, 'Thank you for the answer. We will look through it.');
        }

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ5(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q5')) {
            $Qformat = $request->session()->get('Q5')['Qformat'];
        } else {
            // $request->session()->put('counter', $request->session()->get('counter')+ 1);
            $Qformat = rand(1, 4);
        }

        return view('Questions.Q5')->with('Qformat', $Qformat);
    }

    public function saveQ5(Request $request)
    {
        $request->session()->put('Q5', $request->except('_token'));
        // dd($request->input());
        $displayedResult = array();
        $random = $request->input('Qformat');
        // dd($random);
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q5_1'), 'c', "This is a Floyd's triangle algorithm."));
            $added = $request->session()->get('Q5');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q5', $added);
        } else if ($random == 2 || $random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q5_1A'), 'counter'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q5_1B'), 'rows'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q5_1C'), 'd'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q5_1D'), 'counter'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q5');
            $added['correct'] = strval($correct) . '/4';
            $request->session()->put('Q5', $added);
            if ($correct < 4) {
                array_push($displayedResult, "This is a Floyd's Triangle algorithm.");
            } else {
                array_push($displayedResult, "");
            }
            // dd($displayedResult);
        } else if ($random == 4) {
            array_push($displayedResult, 'Thank you for the answer. We will look through it.');
        }

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ6(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q6')) {
            $Qformat = $request->session()->get('Q6')['Qformat'];
        } else {
            // $request->session()->put('counter', $request->session()->get('counter')+ 1);
            $Qformat = rand(1, 4);
        }

        return view('Questions.Q6')->with('Qformat', $Qformat);
    }

    public function saveQ6(Request $request)
    {
        $request->session()->put('Q6', $request->except('_token'));
        // dd($request->input());
        $displayedResult = array();
        $random = $request->input('Qformat');
        // dd($random);
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q6_1'), 'a', ''));
            $added = $request->session()->get('Q6');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q6', $added);
        } else if ($random == 2 || $random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q6_1A'), 'derived()'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q6_1B'), 'base()'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q6_1C'), 'derived()'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q6');
            $added['correct'] = strval($correct) . '/3';
            $request->session()->put('Q6', $added);
        } else if ($random == 4) {
            array_push($displayedResult, 'Base x = new Base();');
            array_push($displayedResult, 'Base y = new Derived();');
            array_push($displayedResult, 'Derived z = new Derived();');
            array_push($displayedResult, 'DoPrint(x);');
            array_push($displayedResult, 'DoPrint(y);');
            array_push($displayedResult, 'DoPrint(z);');
            // dd($displayedResult);
        }

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ7(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q7')) {
            $Qformat = $request->session()->get('Q7')['Qformat'];
        } else {
            // $request->session()->put('counter', $request->session()->get('counter')+ 1);
            $Qformat = rand(1, 4);
        }

        return view('Questions.Q7')->with('Qformat', $Qformat);
    }

    public function saveQ7(Request $request)
    {
        $request->session()->put('Q7', $request->except('_token'));
        // dd($request->input());
        $displayedResult = array();
        $random = $request->input('Qformat');
        // dd($random);
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q7_1'), 'a', ''));
            $added = $request->session()->get('Q7');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q7', $added);
        } else if ($random == 2) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q7_1A'), 'c'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q7_1B'), 'e'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q7_1C'), 'c'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q7');
            $added['correct'] = strval($correct) . '/3';
            $request->session()->put('Q7', $added);
            if ($correct < 3) {
                array_push($displayedResult, ['int temp = arr[j]', 'arr[j] = arr[j+1]', 'arr[j+1] = temp']);
            } else {
                array_push($displayedResult, ['']);
            }
            // dd($displayedResult);
        } else if ($random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q7_1A'), 'int temp=arr[j]'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q7_1B'), 'arr[j]=arr[j+1]'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q7_1C'), 'arr[j+1]=temp'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q7');
            $added['correct'] = strval($correct) . '/3';
            $request->session()->put('Q7', $added);
            array_push($displayedResult, ['int temp = arr[j]', 'arr[j] = arr[j+1]', 'arr[j+1] = temp']);
            array_push($displayedResult, ['int temp = arr[j+1]', 'arr[j+1] = arr[j]', 'arr[j] = temp']);
            // dd($displayedResult);
        } else if ($random == 4) {
            array_push($displayedResult, 'Thank you for the answer. We will look through it.');
            array_push($displayedResult, 'If you wish to check your answer, you may google "Bubble Sort in Java".');
        }

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ8(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q8')) {
            $Qformat = $request->session()->get('Q8')['Qformat'];
        } else {
            // $request->session()->put('counter', $request->session()->get('counter')+ 1);
            $Qformat = rand(1, 4);
        }

        return view('Questions.Q8')->with('Qformat', $Qformat);
    }

    public function saveQ8(Request $request)
    {
        $request->session()->put('Q8', $request->except('_token'));
        // dd($request->input());
        $displayedResult = array();
        $random = $request->input('Qformat');
        // dd($random);
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q8_1'), 'b', ''));
            $added = $request->session()->get('Q8');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q8', $added);
        } else if ($random == 2) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q8_1A'), 'c'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q8_1B'), '>'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q8');
            $added['correct'] = strval($correct) . '/2';
            $request->session()->put('Q8', $added);
            if ($correct < 2) {
                array_push($displayedResult, ['arrLength-2', '>']);
            } else {
                array_push($displayedResult, ['']);
            }
            // dd($displayedResult);
        } else if ($random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q8_1A'), 'arrlength-2'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q8_1B'), '>'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q8');
            $added['correct'] = strval($correct) . '/2';
            $request->session()->put('Q8', $added);
            if ($correct < 2) {
                array_push($displayedResult, ['arrLength-2', '>']);
            } else {
                array_push($displayedResult, ['']);
            }
        } else if ($random == 4) {
            array_push($displayedResult, ['Thanks for answering the question.', 'If you wish to check your answer, you may google "Java Program To Find All The Leaders In An Integer Array".']);
            // dd($displayedResult);
        }

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ9(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q9')) {
            $Qformat = $request->session()->get('Q9')['Qformat'];
        } else {
            // $request->session()->put('counter', $request->session()->get('counter')+ 1);
            $Qformat = rand(1, 4);
        }

        return view('Questions.Q9')->with('Qformat', $Qformat);
    }

    public function saveQ9(Request $request)
    {
        $request->session()->put('Q9', $request->except('_token'));
        // dd($request->input());
        $displayedResult = array();
        $random = $request->input('Qformat');
        // dd($random);
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q9_1'), 'a', ''));
            $added = $request->session()->get('Q9');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q9', $added);
            if ($displayedResult[0][2]) {
                array_push($displayedResult, '');
            } else {
                array_push($displayedResult, 'This is a palindrome checker program.');
            }
            // dd($displayedResult);
        } else if ($random == 2) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q9_1A'), 'b'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q9_1B'), 'c'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q9_1C'), 'b'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q9_1D'), 'c'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q9');
            $added['correct'] = strval($correct) . '/4';
            $request->session()->put('Q9', $added);
            if ($correct == 4) {
                array_push($displayedResult, '');
            } else {
                array_push($displayedResult, 'Please check your answer again. This is a palindrome checker program.');
            }
            // dd($displayedResult);
        } else if ($random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q9_1A'), 'str.charat(i)'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q9_1B'), 'str.charat(j)'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q9_1C'), 'i++'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q9_1D'), 'j--'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q9');
            $added['correct'] = strval($correct) . '/4';
            $request->session()->put('Q9', $added);
            array_push($displayedResult, ['str.charAt(i)', 'str.charAt(j)', 'i++', 'j--']);
            if ($correct == 4) {
                array_push($displayedResult, '');
            } else {
                array_push($displayedResult, 'Please check your answer again. This is a palindrome checker program.');
            }
        } else if ($random == 4) {
            array_push($displayedResult, ['Thank you for the answer. We will look through it.', 'You may check your answer by googling "Java program to check whether a string is a Palindrome".']);
        }

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ10(Request $request)
    {
        // dd($request->session()->get('counter'));
        if ($request->session()->has('Q10')) {
            $Qformat = $request->session()->get('Q10')['Qformat'];
        } else {
            // $request->session()->put('counter', $request->session()->get('counter')+ 1);
            $Qformat = rand(1, 4);
        }

        return view('Questions.Q10')->with('Qformat', $Qformat);
    }

    public function saveQ10(Request $request)
    {
        // dd($request->session()->get('counter'));
        $request->session()->put('Q10', $request->except('_token'));
        // dd($request->input());
        $displayedResult = array();
        $random = $request->input('Qformat');
        // dd($random);
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q10_1'), 'c', ''));
            $added = $request->session()->get('Q10');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q10', $added);
            array_push($displayedResult, 'This is a program to count all Palindrome sub-strings.');
        } else if ($random == 2) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q10_1A'), 'a'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q10_1B'), 'a'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q10');
            $added['correct'] = strval($correct) . '/2';
            $request->session()->put('Q10', $added);
            if ($correct == 2) {
                array_push($displayedResult, ['']);
            } else {
                array_push($displayedResult, ['The answers are', '==', 'true']);
            }
            // dd($request->session()->get('counter'));
            // dd($displayedResult);
        } else if ($random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q10_1A'), '=='));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q10_1B'), 'true'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q10');
            $added['correct'] = strval($correct) . '/2';
            $request->session()->put('Q10', $added);
            if ($correct == 2) {
                array_push($displayedResult, ['']);
            } else {
                array_push($displayedResult, ['The answers are', '==', 'true']);
            }
            // dd($displayedResult);
        } else if ($random == 4) {
            array_push($displayedResult, ['Thank you for the answer.', 'You may check your answer by googling the keyword stated above in the topic.']);
        }
        // dd($request->session()->get('counter'));
        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function checkMCQ($input, $correctAns, $explanations)
    {
        $result = 'The correct answer is ' . strtoupper($correctAns) . '.';
        if (is_bool($input) == false) {
            $input = strtolower($input);
        }
        // dd($input);
        if ($input == $correctAns) {
            $result .= ' Your answer is correct.';
            $explanation = '';
            $flag = true;
        } else {
            $result .= ' Your answer is wrong.';
            $explanation = $explanations;
            $flag = false;
        }

        return array($result, $explanation, $flag);
    }

    public function checkOnlyOneSelect($input, $correctAns)
    {
        if (is_bool($input) == false) {
            $input = strtolower($input);
        }
        // dd($input);
        if ($input == $correctAns) {
            $flag = true;
        } else {
            $flag = false;
        }

        return $flag;
    }

    public function checkMultipleSelect($input, $correctAns)
    {
        $options = ['x', 'y', 'z'];
        if (is_bool($input) == false) {
            $input = strtolower($input);
        }
        // dd($input);
        if (in_array($input, $options)) {
            if ($input != $correctAns) {
                $flag = true;
            } else {
                $flag = false;
            }
        } else {
            $flag = false;
        }

        return $flag;
    }

    public function checkCorrectness($array)
    {
        $correct = 0;
        // dd($array);
        for ($x = 0; $x < count($array); $x++) {
            if ($array[$x]) {
                $correct++;
            }
        }

        return $correct;
    }

    public function demoRun(Request $request)
    {
        $request->session()->put('QDemo', $request->input());

        // dd(session()->all());
        $displayedResult = array();

        array_push($displayedResult, $this->checkMCQ($request->input('QDemo_1'), 'b', ''));
        $added = $request->session()->get('QDemo');
        $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
        $request->session()->put('QDemo', $added);

        // dd(session()->all());
        // dd($displayedResult);

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }
}
