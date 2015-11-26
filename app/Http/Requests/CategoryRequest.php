<?php namespace App\Http\Requests;

class CategoryRequest extends BackendRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        parent::authorize();

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule = [
            'cat_name' => 'required',
            'keywords' => 'max:255',
            'cat_desc' => 'max:255',
            'parent_id' => 'required|integer',
            'sort_order' => 'integer',
            'template_file' => 'string|max:50',
            'measure_unit' => 'string|max:15',
            'show_in_nav' => 'required|boolean',
            'style' => 'string|max:150',
            'is_show' => 'required|boolean',
            'grade' => 'required|boolean',
            'filter_attr' => 'max:255',
        ];

        return $rule;
    }

    /**
     * Set custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'cat_name.required'    =>'分类名称不能为空',
            'keysword.max'         =>'关键字不能超过255个字符',
            'cat_desc.max'         =>'关键字不能超过255个字符',
            'parent_id.required'   =>'请选择父级分类',
            'sort_order.integer'   =>'请输入合法数字',
            'template_file.max'    =>'长度超出限制',
            'measure_unit.max'     =>'长度超出限制',
            'style.max'            =>'长度超出限制',
            'show_in_nav.required' =>'请选择是否在导航显示',
            'is_show.required'     =>'请选择是否在前台显示',
            'grade.required'       =>'请选择是否在分级显示',
            'filter_attr.max'      =>'长度超出限制',
        ];
    }
}
