<!-- Estilos adicionales para los nuevos componentes -->
<style>
    /* Estilos para elementos de proceso con números */
    .proceso-numero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    
    .proceso-item {
        background: rgba(255, 255, 255, 0.7);
        border-radius: 12px;
        padding: 1.25rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        border-left: 3px solid #667eea;
        transition: all 0.3s ease;
    }
    
    .proceso-item:hover {
        transform: translateX(5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }
    
    /* Estilos para iconos de configuración */
    .config-icon {
        font-size: 1.5rem;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    
    .config-item {
        background: rgba(255, 255, 255, 0.7);
        border-radius: 12px;
        padding: 1.25rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        border-left: 3px solid #10b981;
        transition: all 0.3s ease;
    }
    
    .config-item:hover {
        transform: translateX(5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }
    
    /* Estilos para elementos de error */
    .error-item {
        background: white;
        border-radius: 12px;
        padding: 1.25rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(220, 38, 38, 0.2);
        transition: all 0.3s ease;
    }
    
    .error-item:hover {
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }
    
    /* Estilos para la línea de tiempo */
    .process-timeline {
        position: relative;
        padding: 0 1rem;
    }
    
    .timeline-step {
        display: flex;
        margin-bottom: 2rem;
        position: relative;
        z-index: 2;
    }
    
    .step-number {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 1.5rem;
        flex-shrink: 0;
        position: relative;
        z-index: 2;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    
    .step-content {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        width: 100%;
        border-left: 3px solid #667eea;
    }
    
    .timeline-connector {
        position: absolute;
        left: 1.6rem;
        width: 3px;
        height: 2.5rem;
        background: linear-gradient(180deg, #667eea 0%, #764ba2 100%);
        margin-left: 0.25rem;
        margin-top: -0.5rem;
        margin-bottom: -0.5rem;
        z-index: 1;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .timeline-step {
            flex-direction: column;
        }
        
        .step-number {
            margin-bottom: 1rem;
            margin-right: 0;
        }
        
        .timeline-connector {
            display: none;
        }
    }
</style>
