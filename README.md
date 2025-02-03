# Task Management System 🚀

Welcome to the **Task Management System**, a robust and user-friendly application designed to help you manage projects, tasks, and user profiles efficiently. Built with **Laravel** (backend) and **React** (frontend) using **Inertia.js**, this system provides a seamless experience for organizing and tracking your work.

---

## Features ✨

### **Project Management**
- **Create, Read, Update, Delete (CRUD)** operations for projects.
- Upload project images for better visualization.
- Filter and sort projects by name, status, and due date.
- Detailed project view with tasks and status tracking.

### **Task Management**
- **CRUD** operations for tasks.
- Assign tasks to users and link them to specific projects.
- Upload task images and attachments.
- Filter and sort tasks by name, status, priority, and due date.
- **My Tasks** section for viewing tasks assigned to the logged-in user.

### **User Management**
- **CRUD** operations for users.
- Secure password handling with bcrypt hashing.
- Paginated user listing with sorting and search functionality.

### **Dashboard**
- Overview of tasks categorized by status:
  - **Pending Tasks**
  - **In Progress Tasks**
  - **Completed Tasks**
- Displays both total tasks and tasks assigned to the logged-in user.

### **Profile Management**
- Update user profile information.
- Email verification support.
- Delete user account with password confirmation.

---

## Technologies Used 🛠️

### **Backend**
- **Laravel 10.x** - PHP framework for backend logic.
- **Inertia.js** - For seamless integration between Laravel and React.
- **Eloquent ORM** - For database interactions.
- **File Storage** - For handling image uploads (using Laravel's `Storage` facade).

### **Frontend**
- **React** - JavaScript library for building user interfaces.
- **Tailwind CSS** - For styling components.
- **Inertia.js** - For routing and server-side rendering.

### **Database**
- **MySQL** - Relational database for storing application data.

---

## Installation Guide 📥

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/yourusername/your-repo-name.git
   cd your-repo-name
   ```

2. **Install Dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Set Up Environment:**
   - Copy `.env.example` to `.env` and configure your database credentials:
     ```bash
     cp .env.example .env
     ```
   - Generate an application key:
     ```bash
     php artisan key:generate
     ```

4. **Run Migrations:**
   ```bash
   php artisan migrate
   ```

5. **Compile Assets:**
   ```bash
   npm run dev
   ```

6. **Start the Development Server:**
   ```bash
   php artisan serve
   ```

7. **Access the Application:**
   Open your browser and navigate to `http://localhost:8000`.

---

## Usage 🚀

### **Dashboard**
- Navigate to the **Dashboard** to get an overview of your tasks.

### **Projects**
- Go to **Projects** to create, view, update, or delete projects.

### **Tasks**
- Visit **Tasks** to manage your tasks. You can filter tasks by status, assign them to users, and link them to projects.

### **Users**
- Access **Users** to manage user accounts (admin only).

### **Profile**
- Update your profile information or delete your account from the **Profile** section.

---

## Screenshots 📸
![Screenshot 2024-12-19 at 14-05-41 Dashboard - Laravel](https://github.com/user-attachments/assets/76de6d7c-93c6-43f4-9cf4-3890290348ab)

*Dashboard Overview*
![Screenshot 2024-12-19 at 14-06-03 Project Voluptas ut non quia suscipit autem ipsa est doloremque  - Laravel](https://github.com/user-attachments/assets/42cda0f4-6773-42b1-a645-c39b1a9822d5)

![Screenshot 2024-12-19 at 14-05-27 Projects - Laravel](https://github.com/user-attachments/assets/f193279b-346a-4cdc-8cf7-365b594d80e7)

*Projects List*




---

## Contributing 🤝

We welcome contributions! Here’s how you can help:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeatureName`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeatureName`).
5. Open a pull request.

---

## License 📜

This project is open-source and available under the [MIT License](LICENSE).

---

## Get Started Today! 🎉

Whether you're managing projects, tasks, or users, this **Task Management System** has got you covered. Dive in and start organizing your work efficiently! 🚀

---

Feel free to customize this README to better fit your project's specific details and requirements.
