import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './app.css'
import App from './App.tsx'
import { NavigationProvider } from './contexts/NavigationProvider.tsx'
import { ToastContainer } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

createRoot(document.getElementById('root')!).render(
    <StrictMode>
        <NavigationProvider>
            <App />
            <ToastContainer />
        </NavigationProvider>
    </StrictMode>,
)
