import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './app.css'
import App from './App.tsx'
import { NavigationProvider } from './contexts/NavigationProvider.tsx'

createRoot(document.getElementById('root')!).render(
    <StrictMode>
        <NavigationProvider>
            <App />
        </NavigationProvider>
    </StrictMode>,
)
