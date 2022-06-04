<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PinjamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'jenis_pengguna'    => 'required',
            'jenis_pinjam'      => 'required',
            'nama'              => 'required',
            'nomor_induk'       => 'required',
            'hp'                => 'required|max:13|starts_with:62',
            'email'             => 'required|email|ends_with:@uin-suska.ac.id,@students.uin-suska.ac.id,',
            'nomor'             => 'required',
            'tanggal_surat'     => 'required',
            'nama_kegiatan'     => 'required',
            'file'              => 'required|file|mimes:pdf|max:1024',
            'status'            => 'required',
            //
        ];
    }

    public function messages()
    {
        return [
            '*.required'              => ':attribute tidak boleh kosong'
        ];
    }

    public function attributes()
    {
        return [
            'file'  => 'Surat Peminjaman'
        ];
    }
}
