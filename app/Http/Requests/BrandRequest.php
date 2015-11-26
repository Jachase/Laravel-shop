<?php namespace App\Http\Requests;

class BrandRequest extends BackendRequest
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
        return [
            'brand_name'    => 'required|max:255',
            'brand_logo'    => 'string|max:255',
            'brand_desc'    => 'string',
            'site_url'      => 'sometimes|url',
            'is_show'       => 'required|boolean',
        ];
    }

    /**
     * Set custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'brand_name.required'    => '品牌名称不能为空',
            'brand_name.max'         => '品牌名称长度超出限制',
            'brand_logo.max'         => '图片不合法',
            'brand_desc.string'      => '品牌介绍不合法',
            'site_url.url'           => '不是一个合法的链接',
            'is_show.required'       => '请选择品牌在前台是否显示',
            'is_show.boolean'        => '品牌参数不合法'
        ];
    }
}
