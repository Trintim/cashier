<?php

namespace App\Services;

use App\Repository\Interfaces\ClientRepositoryInterface;

class ClientService
{
    private ClientRepositoryInterface $clientRepository;
    private LogService $logService;
    private UserService $userService;

    /**
     * @param ClientRepositoryInterface $clientRepositoryInterface
     * @param LogService $logService
     */
    public function __construct(ClientRepositoryInterface $clientRepositoryInterface, LogService $logService, UserService $userService)
    {
        $this->clientRepository = $clientRepositoryInterface;
        $this->logService = $logService;
        $this->userService = $userService;
    }

    /**
     * Returns a collection of the clients
     *
     * @param \App\Models\Client $model
     * @return \Illuminate\Support\Collection
     */
    public function index(): \Illuminate\Support\Collection
    {
        return $this->clientRepository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Throwable
     */
    public function create(array $attributes): \Illuminate\Database\Eloquent\Model
    {
        $client = $this->clientRepository->create($attributes);

        $user = [
            'name' => $attributes['name'],
            'phone' => $attributes['phone'],
            'image' => 'clients/defaultUser.jpg',
            'occupation' => $attributes['profession'],
            'email' => $attributes['email'],
            'password' => $attributes['password'],
            'access_level' => 50,
            'role' => 'client',
            'email_verified_at' => null,
            'locale' => 'pt-BR',
            'client_id' => $client->id,
            'remember_token' => null,
        ];

        $this->userService->create($user);
        $this->logService->create($client->id, $client->name, 'clients.create');
        return $client;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function show(int $id): \Illuminate\Database\Eloquent\Model
    {
        return $this->clientRepository->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param array $attributes
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update(array $attributes, int $id): \Illuminate\Database\Eloquent\Model
    {
        $client = $this->clientRepository->update($attributes, $id);
        $this->logService->create($client->id, $client->name, 'clients.update');
        return $client;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return bool
     */
    public function destroy(int $id): bool
    {
        $client = $this->clientRepository->findOrFail($id);
        $deleted = $this->clientRepository->destroy($id);
        if ($deleted) {
            $this->logService->create($client->id, $client->name, 'clients.delete');
        }
        return $deleted;
    }
}
