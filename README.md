## Task Manager App

This is a very simple Laravel web application for task management. It can be used for simple stuffs such as:

- Create task (info to save: task name, priority, timestamps)
- Edit task
- Delete task
- Reorder tasks with drag and drop in the browser. Priority should automatically be updated based on this. #1 priority goes at top, #2 next down and so on.

Tasks are saved to a mysql table.

NOTE: An added project functionality to the tasks. User are be able to create and select a project from a dropdown and only view tasks associated with that project.

## Prerequisites

Before you start, ensure you have the following installed:

- Docker
- PHP version 8.3 or later
- Web browser
- Shell or terminal environment

## Getting Started

1. **Clone the repository:**

   ```bash
   git clone https://github.com/degod/task-manager.git
   ```

2. **Navigate to the project directory:**

	```bash
	cd task-manager/
	```

3. **Install Composer dependencies:**

	```bash
	composer install
	```

4. **Start the application with Laravel Sail:**

	```bash
	./vendor/bin/sail up -d
	```

5. **Logging in to container shell:**

	```bash
	./vendor/bin/sail root-shell
	```

6. **Completing the setup:**

	```bash
	php artisan migrate:fresh && php artisan test
	```

7. **Exiting container shell:**

	```bash
	exit
	```

8. **Accessing the application:**

- The application should now be running on your local environment.
- Navigate to `http://task-manager.test` in your browser to access the application.
- To access the database, go to `http://task-manager.test:8001/`.

## Contributing

If you encounter bugs or wish to contribute, please follow these steps:

- Fork the repository and clone it locally.
- Create a new branch (`git checkout -b feature/fix-issue`).
- Make your changes and commit them (`git commit -am 'Fix issue'`).
- Push to the branch (`git push origin feature/fix-issue`).
- Create a new Pull Request against the `main` branch, tagging `@degod`.

## Contact

For inquiries or assistance, you can reach out to Godwin Uche:

- `Email:` degodtest@gmail.com
- `Phone:` +2348024245093
