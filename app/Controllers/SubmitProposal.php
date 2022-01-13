<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\jobModel;

class SubmitProposal extends BaseController{

    protected $jobModel;

    public function __construct()
    {
        $this->jobModel = new jobModel();
        helper(['text','url']);
    }

    public function index()
    {
        return view('submit-proposal');
    }

    public function proposalList(){
        $data = [
            'title' => 'Proposal List',
            'proposal' => $this->jobModel->getData(),
            'isi' => 'admin/proposal-list',
        ];
        echo view('admin/proposal-list',$data);
    }

    public function insertData(){
        if ($this->request->getMethod() === 'post') {

			$rules = [
				'file_name' => [
					'label' => 'File',
					'rules' => 'max_size[file_name,2048]|mime_in[file_name,application/pdf,application/x-download, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/zip]'
				],
			];

			if ($this->validate($rules)) {

				$file = $this->request->getFile('file_name');
				$fileName = time().$file->getRandomName();
				$file->move('document/', $fileName);

                $stat = 'In Progress';

                $data = [
                    'company_name' => $this->request->getPost('company_name'),
                    'game_license' => $this->request->getPost('game_license'),
                    'description' => $this->request->getPost('description'),
					'file_name' => $fileName,
                    'status' => $stat,
                ];

                $this->jobModel->addData($data);
			
				return redirect()->to(base_url('/submit-proposal'))->with('success', 'Data saved.');
			}

			return redirect()->to(base_url('/submit-proposal'))->withInput()->with('validation', $this->validator->getErrors());
		}

        return redirect()->to(base_url('/submit-proposal'));
    }

    public function editRequest($proposal_id){
        $data = [
            'title' => 'Edit Data',
            'proposal' => $this->jobModel->editData($proposal_id),
            'isi' => 'proposal-edit',
        ];
        echo view('proposal-edit',$data);
    }

    public function acceptRequest($proposal_id){
        $status = 'Approved';
        $data=[
            'status' => $status,
        ];
        $this->jobModel->updateData($data, $proposal_id);
        return redirect()->to(base_url('/proposal-list'));
    }

    public function declineRequest($proposal_id){
        $status = 'Declined';
        $data=[
            'status' => $status,
        ];
        $this->jobModel->updateData($data, $proposal_id);
        return redirect()->to(base_url('/proposal-list'));
    }

    public function deleteRequest($proposal_id){
        $this->jobModel->deleteData($proposal_id);
        return redirect()->to(base_url('/proposal-list'));
    }

}